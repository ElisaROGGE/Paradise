<?php

session_start();

function get($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'GET' ){ route($route, $path_to_include); }  
}
function post($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'POST' ){ route($route, $path_to_include); }    
}
function put($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'PUT' ){ route($route, $path_to_include); }    
}
function patch($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'PATCH' ){ route($route, $path_to_include); }    
}
function delete($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'DELETE' ){ route($route, $path_to_include); }    
}
/**
 * `any` est une fonction qui prend deux paramètres, `` et ``, et appelle la
 * fonction `route` avec ces deux paramètres
 * 
 * @param route L'itinéraire que vous souhaitez faire correspondre.
 * @param path_to_include Le chemin d'accès au fichier que vous souhaitez inclure.
 */
function any($route, $path_to_include){ route($route, $path_to_include); }
function route($route, $path_to_include){
  $ROOT = $_SERVER['DOCUMENT_ROOT'];
  if($route == "/404"){
    include_once("$ROOT/$path_to_include");
    exit();
  }  
 /* Il supprime tous les caractères non autorisés dans une URL. */
  $request_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
  /* Il supprime la barre oblique finale de l'URL. */
  $request_url = rtrim($request_url, '/');
  /* Il supprime la chaîne de requête de l'URL. */
  $request_url = strtok($request_url, '?');
/* Diviser le parcours en plusieurs parties. Par exemple, si la route est `/users/:id`, alors les
parties de la route seront `['', 'users', ':id']`. */
  $route_parts = explode('/', $route);
  $request_url_parts = explode('/', $request_url);
  /* Il supprime le premier élément du tableau. */
  array_shift($route_parts);
  array_shift($request_url_parts);
  /* Vérifier si la route est `/` et l'URL de la demande est également `/`. Si les deux sont vrais,
  alors
  l'itinéraire est mis en correspondance et le fichier correspondant est inclus. */
  if( $route_parts[0] == '' && count($request_url_parts) == 0 ){
    include_once("$ROOT/$path_to_include");
    exit();
  }
  /* Vérifier si le nombre de parties dans la route et le nombre de parties dans l'URL de la demande
  sont égaux. S'ils ne sont pas égaux, l'itinéraire n'est pas mis en correspondance. */
  if( count($route_parts) != count($request_url_parts) ){ return; }  
  $parameters = [];

/* Une boucle for. Il est utilisé pour itérer sur les parties de la route. */
  for( $__i__ = 0; $__i__ < count($route_parts); $__i__++ ){
    $route_part = $route_parts[$__i__];
    /* Vérifier si la partie de l'itinéraire commence par un signe dollar. Si c'est le cas, alors c'est
    un paramètre. */
    if( preg_match("/^[$]/", $route_part) ){
      /* Il supprime le signe dollar de la partie route. Par exemple, si la partie route est ``,
      alors elle deviendra `id`. */
      $route_part = ltrim($route_part, '$');
      /* Pousser la valeur de la partie URL de la requête vers le tableau ``. */
      array_push($parameters, $request_url_parts[$__i__]);
      /* Créer une variable avec le nom de la partie route et lui affecter la valeur de la partie url
      de la requête. Par exemple, si la partie route est ``, alors il créera une variable nommée
      `` et lui assignera la valeur de la partie URL de la requête. */
      $$route_part=$request_url_parts[$__i__];
    }
    /* Vérifier si la partie route n'est pas égale à la partie URL de la demande. S'il n'est pas égal,
    il revient. */
    else if( $route_parts[$__i__] != $request_url_parts[$__i__] ){
      return;
    } 
  }
  /* Y compris le fichier que vous avez passé à la fonction. */
  include_once("$ROOT/$path_to_include");
  exit();
}
/**
 * Il affiche du texte à l'écran, mais il s'assure également que le texte peut être affiché en toute
 * sécurité.
 * 
 * @param text Texte à convertir.
 */
function out($text){echo htmlspecialchars($text);}
/**
 * Il génère une chaîne aléatoire et la stocke dans la session.
 */
function set_csrf(){
  if( ! isset($_SESSION["csrf"]) ){ $_SESSION["csrf"] = bin2hex(random_bytes(50)); }
  echo '<input type="hidden" name="csrf" value="'.$_SESSION["csrf"].'">';
}
/**
 * Si le jeton CSRF de la session ne correspond pas à celui des données POST, la requête n'est pas
 * valide
 * 
 * @return La fonction is_csrf_valid() renvoie une valeur booléenne.
 */
function is_csrf_valid(){
  if( ! isset($_SESSION['csrf']) || ! isset($_POST['csrf'])){ return false; }
  if( $_SESSION['csrf'] != $_POST['csrf']){ return false; }
  return true;
}