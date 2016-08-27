# Usage

## New projects
1. Build and run the containers  
  ```sh
  docker-compose up
  ```  
2. Create a new silverstripe project by running  
  ```sh
  docker-compose run silverstripe composer create-project silverstripe/installer /code/www
  ```  
3. Access the site at `http://localhost`  

## Existing projects
1. Build and run the containers  
  ```sh
  docker-compose up
  ```  
2. Copy existing project to `./code/site/`  
3. Access the site at `http://localhost`

# TODO
[] Create a docker user group (on host machine) in the install script  
[] Create run silverstripe container as www-data  
[] Create run caddy container as www-data  
[] Create a redis container for session storage  
