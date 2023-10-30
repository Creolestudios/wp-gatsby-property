## wp gatsby-property

Gatsby with WordPress.

## WordPress Admin Credentials

**Username:** admin

**Password:** admin@123

## Version

[![MIT License](https://img.shields.io/badge/Node-18.0.0-blue.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/WordPress-6.3-blue.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/Gatsby-5.11.0-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)

## Run Locally

Set database credentials for WordPress in wp-config.php

```bash
define( 'DB_USER', 'your_username' );
```

```bash
define( 'DB_PASSWORD', 'your_password' );
```

Extract the project folder and go to the project directory

```bash
  cd gatsbydemo
```

Install gatsby-cli globally

```bash
npm install -g gatsby-cli
```

Go to the gatsby directory

```bash
cd wp-gatsby
```

Install node dependency

```bash
npm i
```

Start the local development server

```bash
gatsby develop
```
