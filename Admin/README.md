# ivo-admin-site

Este proyecto tendrá el desarrollo del sitio de administración de IVO Talents

Requisitos  
**PHP >= 7.1.3  
MariaDB >= 10.1.36  
Composer  
Node.js**

Pasos para Ejecutar projecto de Admin  

1. Descarga/Clonar repositorio  
2. Ejecutar `composer i` para descargar dependencias  
3. Copiar archivo **.env.example** a **.env** en mismo directorio   
4. Modificar variables para base de datos en **.env**  
5. Ejecutar:`php artisan key:generate`  

6. Ejecutar siguientes comandos SQL para anadir relaciones que requiere Voyager por defecto con la tabla usuarios, antes de instalar Voyager:

~~~~sql
	ALTER TABLE `users`  
		ADD UNIQUE KEY `users_email_unique` (`email`),
		ADD KEY `users_role_id_foreign` (`role_id`);

	ALTER TABLE `users`	  
    	ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
~~~~

7. Ejecutar `php artisan voyager:install`  
8. Ejecutar `php artisan voyager:admin cambiar@email.com --create` o `php artisan voyager:admin cambiar@email.com`  si ya existe usuario Administrador
9. Ejecutar `php artisan serve` y/o  correr desde `localhost\public\admin`