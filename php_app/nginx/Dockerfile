FROM nginx:latest

RUN \
    rm -Rf /etc/nginx/sites-enabled/* /etc/nginx/sites-available/*

COPY nginx.conf               /etc/nginx/
COPY default    /etc/nginx/sites-enabled/

EXPOSE 80/tcp 443/tcp

ENTRYPOINT ["nginx", "-g", "daemon off;"]