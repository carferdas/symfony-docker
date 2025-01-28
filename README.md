# Symfony 7 + Nginx + PostgreSQL 14 + RabbitMQ + Redis Starter Kit

This repository provides a starter kit for setting up a development environment with **Symfony**, **Nginx**, **PostgreSQL**, **RabbitMQ**, **Redis**, and **Xdebug**, using **Alpine Linux**. This kit is designed to be lightweight and efficient, making it ideal for developing modern web applications.

## Features

- **Symfony 7**: PHP framework for web development.
- **Nginx**: High-performance web server.
- **PostgreSQL 14**: Relational database management system.
- **RabbitMQ**: Message broker for handling task queues.
- **Redis**: In-memory caching and database.
- **Xdebug**: Debugging tool for PHP.
- **Alpine Linux**: Lightweight and secure Linux distribution based on musl libc and busybox.

## Prerequisites

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Quick Setup

1. **Clone the repository:**

   ```bash
   git clone https://github.com/carferdas/symfony-docker.git
   cd symfony-docker
2. **Build and start the containers:**
  ```bash
  docker-compose up -d --build
```
3. **Access the application:**
Open your browser and visit http://localhost to see the Symfony application running.
