

## 🗂 Tech Stack

Below is a list of technologies we use at this project

*  🎨 **Frontend:**  Bootstrap 5
* 🏗 **Backend:** Laravel 11
* 🌳 **Services:** DataTables, Mix
* 📚 **Database:** Sqlite

## 💻 How to Install
### 1. Set environment variables
First you need to create ```.env``` file in the main directory with the data from ```env-example``` file.

### 2. Create Database
You need to create ```database.sqlite``` file in the /database directory . Move ```database.sqlite.example``` file from root directory to ```/database``` and removing extension ```.example``` .

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


## 🔐 User for login in FE
```
username: admin@admin.com
password: 12345678
```

# Screenshots

## User interface with DataTables
![](/files/project1.png)


## Employee Portal with Bootstrap
![](/files/project2.png)

## Edit Page for Employee
![](/files/project3.png)
