# Usage

## New projects
1. Build and run the containers  
  ```sh
  docker-compose up
  ```  
2. Create a new silverstripe project by running  
  ```sh
  docker-compose run silverstripe composer create-project silverstripe/installer .
  ```  
3. Access the site at `http://localhost`  

## Existing projects
1. Build and run the containers  
  ```sh
  docker-compose up
  ```  
2. Copy existing project to `./code/site/`  
3. Access the site at `http://localhost`
