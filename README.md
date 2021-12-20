

Did:
1. composer require laravel/ui
2. php artisan ui bootstrap --auth
3. npm install laravel-mix@latest --save-dev
4. npm install && npm run dev
5. php artisan migrate (after adding $table->boolean('role')->nullable(); to migration)


Changed And Added Files:
    app/Http/Controllers/Auth:
        RegisterController.php
        LoginController.php

    app/Http/Controllers:
        AdminController.php
        UserController.php

    app/Http/Middleware:
        isAdminMiddleware.php
        isUserMiddleware.php
        PreventBackHistory.php
        RedirectIfAuthenticated.php

    app/Http:
        Kernel.php

    app/Models:
        User.php

    databaes/migrations

    routes:
        web.php

