# Welcome to Amazing Walls!

## Build instructions
1. Run `npm install` to install js dependencies 
2. Run `composer install` to install php dependencies
3. Create new .env file `cp .env.example .env`
4. Generate new app key `php artisan key:generate`
5. Run `npm run dev` to start vite dev server
 
#### In another terminal:
1. run `php artisan serve` to start laravel 
2. Access site at http://localhost:8000/
   

## Technology
The site is built primarily with laravel in php with the interactive parts built in svelte. Tailwind is used for styling.