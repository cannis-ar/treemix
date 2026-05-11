# Treemix Profesional

Sitio web premium de la línea Profesional de Treemix. Construido en Laravel 12 + PHP 8.3 con Blade, Vite y CSS/JS vanilla.

## Stack

- Laravel 12
- PHP 8.3
- Vite + JS vanilla (sin frameworks pesados)
- CSS puro con tokens de diseño (variables CSS)
- Tipografías Fraunces + Inter Tight (Google Fonts)

## Estética

- Paleta black & silver premium con acento verde Treemix
- Gradientes plateados con `background-clip: text`
- Animaciones sutiles al scroll con IntersectionObserver
- Cards de producto con glow al hover (mouse tracking)
- Grano sutil global, gradientes radiales

## Instalación

```bash
# 1. Dependencias
composer install
npm install

# 2. Configuración
cp .env.example .env
php artisan key:generate

# 3. Configurar BD en .env (DB_DATABASE, DB_USERNAME, etc.)

# 4. Migraciones (cuando se agreguen)
php artisan migrate

# 5. Assets
npm run build      # producción
# o
npm run dev        # desarrollo con hot reload

# 6. Servir
php artisan serve  # local
# o configurar Apache/Nginx apuntando a /public
```

## Estructura de rutas

| Ruta | Controller | Descripción |
|---|---|---|
| `/` | HomeController@index | Landing con hero, productos destacados, lab, CTA |
| `/productos` | ProductController@index | Catálogo completo |
| `/productos/{slug}` | ProductController@show | Detalle de producto |
| `/tecnologia` | PageController@tecnologia | Proceso biotecnológico |
| `/resultados` | PageController@resultados | Métricas de campo |
| `/preguntas-frecuentes` | PageController@faq | FAQ con acordeón |
| `/contacto` | ContactController@show/send | Form con validación y honeypot |

## Catálogo de productos

Por ahora el catálogo vive en `app/Support/ProductCatalog.php` como array PHP. Está pensado para migrarse a una tabla `products` con Eloquent + recurso Filament cuando se necesite editarlo desde admin.

Para migrar a DB:

```bash
php artisan make:model Product -m
php artisan make:filament-resource Product
```

Luego mover los datos del array a un Seeder y reemplazar las llamadas a `ProductCatalog` por queries Eloquent.

## Notas técnicas

- El nav usa `position: fixed` con backdrop-filter blur y se "activa" al hacer scroll (clase `.scrolled` agregada via JS).
- Los reveals on scroll usan IntersectionObserver con threshold 0.12 y `rootMargin: -60px` bottom.
- El formulario de contacto incluye honeypot anti-spam y validación server-side.
- El CSS está estructurado en secciones comentadas (tokens → reset → tipografía → componentes).
- Todas las animaciones respetan `prefers-reduced-motion`.

## Producción en VPS (Apache + PHP-FPM)

VirtualHost ejemplo:

```apache
<VirtualHost *:80>
    ServerName treemix.pro
    DocumentRoot /var/www/treemix-pro/public

    <Directory /var/www/treemix-pro/public>
        AllowOverride All
        Require all granted
    </Directory>

    <FilesMatch \.php$>
        SetHandler "proxy:unix:/var/run/php/php8.3-fpm.sock|fcgi://localhost"
    </FilesMatch>

    ErrorLog ${APACHE_LOG_DIR}/treemix-error.log
    CustomLog ${APACHE_LOG_DIR}/treemix-access.log combined
</VirtualHost>
```

Optimizar para producción:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache
```
