

# 🗂 Tech Stack

Below is a list of technologies we use at this project

*  🎨 **Frontend:**  Bootstrap 5
* 🏗 **Backend:** Laravel 11, PHP 8.2
* 🌳 **Services:** DataTables, Mix, NPM, Composer, JavaScript
* 📚 **Database:** Sqlite, MySQL
* 💻 **Server:** Docker, phpMyAdmin

# 💻 How to Install (2 Methods)
## 📊 Install using laravel server and Sqlite
### 1. Set environment variables
First you need to create ```.env``` file in the main directory with the data from ```.env.example``` file.

### 2. Create Database
You need to create ```database.sqlite``` file in the ```/database``` directory . Move ```database.sqlite.example``` file from root directory to ```/database``` and removing extension ```.example``` .

### 3. Install all addons from ```package.json```
```
npm install
```

### 4.Generated mix files
```
npm run dev
```

### 5. Update Composer Packages
```
composer update
```

### 6. Generate Key
```
php artisan key:generate
```

### 7. Run Server
```
php artisan serve
```
## 📊 Install using Docker, phpMyAdmin and MySQL
### 1. Set environment variables
First you need to create ```.env``` file in the main directory with the data from ```.env.docker``` file.

### 2. Creating all Dockers
```
make build
```

### 3. Start all dockers
```
make run
```

#### 3.1. Run only first time when create all docker images this command to setup all database
```
make setup
```
### 4. Stop all dockers
```
make stop
```

## 🔐 User for login in FE
```
username: admin@admin.com
password: 12345678
```

## Site Address 
> http://localhost:8000/

## phpMyAdmin Address
> http://localhost:8080/


## Screenshots

### Employee interface with DataTables
![](/files/project1.png)


### Employee Portal with Bootstrap
![](/files/project2.png)

### Edit Page for Employee
![](/files/project3.png)
