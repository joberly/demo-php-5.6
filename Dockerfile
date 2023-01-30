FROM php:5.6.40-apache

COPY site/* /var/www/html/

ARG DEMO_COMMIT=dev
ENV DEMO_COMMIT=${DEMO_COMMIT}
