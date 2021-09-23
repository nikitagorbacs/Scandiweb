@Web Application contains 2 pages:

1. Product List - index.php
2. Add Page - add.php

@Used tools/libraries:

1. Vanila HTML/CSS/JS/PHP/MySQL
2. jQuery
3. Bootstrap 5.0

@Description

1. index.php and add.php are located in the main directory

2. Dvd, Book, Furniture classes extend abstract Product class. All of them are located in the Classes folder

3. For the databases connection using PDO Database class was created and locates into Database folder

4. ProductService class was created to lower queries amount and make the logic much more simple. It's used to get and delete products from the database and is located in Service folder

5. autoloader.php helps to autoload all the neccessary clases.

@Disadvantages

1. I've tried to avoid using conditional statements for handling differences in product types by using slightly unreadable line in add.php file "(new $_POST['productType']($\_POST))->addProduct()". That's the main reason why namespaces weren't used.

2. Even I'm familiar with Sass/Scss. I've decided to use Bootstrap. Mainly because of the bootstrap grid.

3. Even jQuery makes a website much slower I've still used it since the web application itself is relatively lightweight.
   P.S. I would never use it with a larger application.

4. I was about to complete the task with the MVC design pattern based framework that I've done by wwatching tutorials. But I wasn't sure if I can use it so I've done it in much more simple way from an absolute scratch.

@Author - Nikita Gorbacs
