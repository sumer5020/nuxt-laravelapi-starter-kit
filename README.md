<p align="center"><img src="logo.svg" width="100" height="100" alt="sumer5020"></p>
<p align="center">
<a href="https://choosealicense.com/licenses/mit/"><img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License"></a>
<a href="#"><img src="https://img.shields.io/badge/Type-Nuxt_WEB_&_Laravel_API_Template-black" alt="Repository Type"></a>
<a href="#"><img src="https://img.shields.io/badge/Latest_Version-0.0.1-blue" alt="Latest Version"></a>
    <a href="#"><img src="https://img.shields.io/badge/Stand_With_Palestine_🇵🇸-white" alt="Stand With Palestine 🇵🇸"></a>
</p>

# Starter Kit for Laravel and Nuxt3

An Open Source Project designed to provide our fellow developers/students a better way to get started.

## Content

| Project   | Type          | Description                     |
| :-------- | :------------ | :------------------------------ |
| `api.app` | `Laravel`     | **Required**. PHP ^8.1          |
| `app`     | `Nuxt3`       | **Required**. Node ^v18.0.0     |


## Features
- api.app
    - Laravel breeze api
    - Http response helper
    - Activity log helper
    - Collection manager helper
    - Htaccess firewall
- app
    - Responsive design
    - Light/dark mode toggle
    - Tailwindcss
    - Multilingual
    - Auth pages
    - Dashboard
    - Toast notification


## Theme Color Reference

| Color              |                                                          | Hex     |
| :---------------- | :-------------------------------------------------------:| :-------|
| Dark theme:       |                                                          |         |
| Primary           | ![#b4c9d9](https://via.placeholder.com/10/b4c9d9?text=+) | #b4c9d9 |
| Secondary         | ![#0b4b7d](https://via.placeholder.com/10/0b4b7d?text=+) | #0b4b7d |
| Background        | ![#090b1f](https://via.placeholder.com/10/090b1f?text=+) | #090b1f |
| Light theme:      |                                                          |         |
| Primary           | ![#203552](https://via.placeholder.com/10/203552?text=+) | #203552 |
| Secondary         | ![#0b4b7d](https://via.placeholder.com/10/0b4b7d?text=+) | #0b4b7d |
| Background        | ![#f0f4f3](https://via.placeholder.com/10/f0f4f3?text=+) | #f0f4f3 |

## Screenshots

<p align="center">
<img width="400" height="300" src="home.png" alt="Home Screenshot">
<img width="400" height="300" src="login.png" alt="Login Screenshot">
<img width="400" height="300" src="register.png" alt="Register Screenshot">
<img width="400" height="300" src="dashboard.png" alt="Dashboard Screenshot">
</p>


## Setup And Run

Test the app by run the following command:

```bash
  # API
  composer install --working-dir=./api.app
  php ./api.app/artisan migrate
  php ./api.app/artisan db:seed
  php ./api.app/artisan serve

  # WEB
  pnpm --prefix ./app install
  pnpm --prefix ./app run dev
```

## License

[MIT](./LICENSE.md)

## Feedback

If you have any feedback, please reach out to us at sumer5020@outlook.com
