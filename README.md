<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->

<a name="readme-top"></a>

<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

<!-- [![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url] -->

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <img src="assets/img/logo.jpeg" alt="Logo" width="120" height="120">

<h3 align="center">Sneaker Fest</h3>

  <p align="center">
    This is a full project for Database Management System (Assignment) (CO3021)
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
      </ul>
    </li>
    <li><a href="#usage">How to run</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

### Built With

-   [![PHP][php.net]][php-url]
-   [![PostgreSQL][postgresql.org]][postgre-url]
-   [![Bootstrap][bootstrap.com]][bootstrap-url]
-   [![JQuery][jquery.com]][jquery-url]

<!-- GETTING STARTED -->

## Getting Started

This is a wesbite selling sneakers that we use Bootstrap, PHP to create the UI and interaction with the database - PostgreSQL.

### Prerequisites

For convenience, we recommend you install [MAMP](https://www.mamp.info/en/mac/) (iOS) or [XAMPP](https://www.apachefriends.org/) (Windows) to run the localhost and Postgre to run the database.

<!-- USAGE EXAMPLES -->

## How to run

To run this project, first you need to create a new database:

```
CREATE DATABASE sneaker_fest;
```

After that, start the server in MAMP or XAMPP and it will automatically create the necessary tables. Then, we need to import data to the website:

```
COPY products(product_name,product_image1,product_image2,product_type,product_origin,product_gender,product_description,product_price) FROM location_path_to_data.csv DELIMITER ';' CSV HEADER;
```

For example:

```
COPY products(product_name,product_image1,product_image2,product_type,product_origin,product_gender,product_description,product_price) FROM '/Users/nguyenminhtam/Desktop/sneaker-website/components/db/data.csv' DELIMITER ';' CSV HEADER;
```

To have a full experience of our website, you will need an admin account. After registering a new account, go to the terminal and type:

```
UPDATE users SET user_level = 1 WHERE id = 1;
```

From there on, you are good to interact with our website!

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[contributors-shield]: https://img.shields.io/github/contributors/GiangHoGoVap/sneaker-website.svg?style=for-the-badge
[contributors-url]: https://github.com/GiangHoGoVap/sneaker-website/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/GiangHoGoVap/sneaker-website.svg?style=for-the-badge
[forks-url]: https://github.com/GiangHoGoVap/sneaker-website/network/members
[stars-shield]: https://img.shields.io/github/stars/GiangHoGoVap/sneaker-website.svg?style=for-the-badge
[stars-url]: https://github.com/GiangHoGoVap/sneaker-website/stargazers
[issues-shield]: https://img.shields.io/github/issues/GiangHoGoVap/sneaker-website.svg?style=for-the-badge
[issues-url]: https://github.com/GiangHoGoVap/sneaker-website/issues
[php.net]: https://img.shields.io/badge/php-B0B3D6?style=for-the-badge&logo=php&logoColor=787CB5
[php-url]: https://www.php.net/
[postgresql.org]: https://img.shields.io/badge/postgresql-FFFFFF?style=for-the-badge&logo=postgresql&logoColor=0064a5
[postgre-url]: https://www.postgresql.org/
[bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[bootstrap-url]: https://getbootstrap.com
[jquery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[jquery-url]: https://jquery.com
