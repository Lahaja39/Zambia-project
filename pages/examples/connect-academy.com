server {
        listen 80;
        listen [::]:80;

        root /var/www/connect-academy.com/html;
        index index.php index.html index.htm index.nginx-debian.html;

        server_name connect-academy.com www.connect-academy.com

        location / {
                try_files $uri $uri/ =404;
        }
}
