FROM nginx:latest

VOLUME /var/www/vote/
RUN rm /etc/nginx/conf.d/default.conf
ADD vote.conf /etc/nginx/conf.d/vote.conf