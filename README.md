# php-mini-api

`A simple php base rest api framework.
 @author Md.Rajib Ul Islam <mdrajibul@gmail.com>
`

### Installation
 - clone repo from git https://github.com/mdrajibul/php-mini-api.git
 - cd to php-mini-api
 - Copy project to any web server apache 2, NgInx, etc
 - If project run under context then please update APPNAME config in app/config.define.php file
 - browse the project or use any rest api test tool

### Framework overview
 - core: all core related library placed here to make a simple rest framework
 - app: application directory. all application related source code need to place here
 
### available api endpoints
 - /example/display/:name  - a example api 
 
 ### This project dockerised. To run the project in container you have to follow below steps
 - cmd to /project. As I set WORKDIR to /project. If you want to change then please change
 - clone repo from git https://github.com/mdrajibul/php-mini-api.git
 - cmd to ./php-mini-api
 - After done run below command
 - docker build -t php-mini-api .
 - docker run -p 82:82 -d --name=docker-php-mini-api php-mini-api
 - Finally browse http://HOST:82