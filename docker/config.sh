#!/bin/bash
APP_EXTERNAL_PORT="8082"

# container names
declare -A containerNames
containerNames["PHP_CONTAINER_NAME"]=solid-php-container
containerNames["NGINX_CONTAINER_NAME"]=solid-nginx-container

# images name
declare -A imageNames
imageNames["PHP_IMAGE_NAME"]=solid-php-image
imageNames["NGINX_IMAGE_NAME"]=solid-nginx-image
