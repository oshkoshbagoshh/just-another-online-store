# Just Another Online Store

## Description

<!-- Provide a short description explaining the what, why, and how of your project. Use the following questions as a guide:

- What was your motivation?
- Why did you build this project? (Note: the answer is not "Because it was a homework assignment.")
- What problem does it solve?
- What did you learn? -->

The Just Another Online Store is a web application where users place orders to buy products.

* Home page - will display a welcome message and some images
* About Page - will display info about the online store and developers
* Products page - will display the available products information. In addition, you can click on a specific product and see its information.
* Cart Page - will display the products added to the cart and the total price to be paid. In addition, a user can remove products from the cart and make purchases
* Login page - will display a form to allow users to log in to the application
* Register Page - will display a form to allow users to sign up for accounts
* My orders page - will display the orders placed by the logged in user
* Admin Panel - will contain sections to manage the store’s products (create, update, delete, and list them)

---
### Technologies

The Online store will be implemented with Laravel (PHP), MySQL database, Bootstrap (a CSS framework), and Blade(a Laravel templating engine)

Below is a class diagram illustrating the application scope and design. 

We have a __User__ class with its data (id, name, email, password, etc.) which can place __Orders__. Each Order is composed of one or more items that are related to a single __Product__. Each __Product__ will have its corresponding data (id, name, description, image, etc.)



## User Story
- As a user, I want to be able to view the products available in the store so that I can select some to purchase.
- As a user, I want to be able to view the details of a product so that I can know more about it.
- As a user, I want to be able to add products to a shopping cart so that I can purchase them later.
- As a user, I want to be able to remove products from the shopping cart so that I can change my mind.
- As a user, I want to be able to purchase products in the shopping cart so that I can have them.
- As a user, I want to be able to view my orders so that I can track them.
- As a user, I want to be able to register for an account so that I can have a personal profile.
- As a user, I want to be able to log in to the application so that I can access my account.
- As a user, I want to be able to log out of the application so that I can make sure no one will access my account.
- As an admin, I want to be able to add products to the store so that users can purchase them.
- As an admin, I want to be able to update products in the store so that users can have updated information.
- As an admin, I want to be able to delete products from the store so that users can’t purchase them.
- As an admin, I want to be able to view all the orders placed by users so that I can track them.
- As an admin, I want to be able to view all the users registered in the application so that I can track them.
---
### Additional Features
- Integrate with Google Maps API to display the store location
- Integrate with Google trends API to display the trending products
- Integrate with openAI API to generate product descriptions
- Integrate with Stripe API to process payments

---




## Table of Contents (Optional)

If your README is long, add a table of contents to make it easy for users to find what they need.

- [Just Another Online Store](#just-another-online-store)
  - [Description](#description)
    - [Technologies](#technologies)
  - [User Story](#user-story)
    - [Additional Features](#additional-features)
  - [Table of Contents (Optional)](#table-of-contents-optional)
  - [Usage](#usage)
  - [Credits](#credits)
  - [License](#license)
  - [Features](#features)
  - [How to Contribute](#how-to-contribute)
  - [Tests](#tests)
  - [Deployment](#deployment)
  - [Demo](#demo)
<!-- 
## Installation

<!-- What are the steps required to install your project? Provide a step-by-step description of how to get the development environment running. -->


## Usage
<!-- 
Provide instructions and examples for use. Include screenshots as needed.

To add a screenshot, create an `assets/images` folder in your repository and upload your screenshot to it. Then, using the relative filepath, add it to your README using the following syntax:

    ```md
    ![alt text](assets/images/screenshot.png)
    ``` -->

    - 2023-12-20 02:27:59
    - POST request (adding in data via the form and automatically displaying the newly added product in the table)
    ![gif](assets/chrome-capture-2023-12-20.gif)
    


## Credits
* AJ Javadi 
* 
<!-- 
List your collaborators, if any, with links to their GitHub profiles.

If you used any third-party assets that require attribution, list the creators with links to their primary web presence in this section.

If you followed tutorials, include links to those here as well. -->

## License

<!-- The last section of a high-quality README file is the license. This lets other developers know what they can and cannot do with your project. If you need help choosing a license, refer to [https://choosealicense.com/](https://choosealicense.com/). -->

---

<!-- 🏆 The previous sections are the bare minimum, and your project will ultimately determine the content of this document. You might also want to consider adding the following sections. -->

<!-- ## Badges

![badmath](https://img.shields.io/github/languages/top/lernantino/badmath)

Badges aren't necessary, per se, but they demonstrate street cred. Badges let other developers know that you know what you're doing. Check out the badges hosted by [shields.io](https://shields.io/). You may not understand what they all represent now, but you will in time. -->

## Features

<!-- If your project has a lot of features, list them here. -->

## How to Contribute

<!-- If you created an application or package and would like other developers to contribute it, you can include guidelines for how to do so. The [Contributor Covenant](https://www.contributor-covenant.org/) is an industry standard, but you can always write your own if you'd prefer. -->

## Tests

<!-- Go the extra mile and write tests for your application. Then provide examples on how to run them here. -->


## Deployment 

- will deploy onto Heroku when finished building 

## Demo 

- will attach a video displaying the features

