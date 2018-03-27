# MLH : HackNYU 2018
## Inspiration
During my everyday commute between college and home, I often encounter homeless people asking for food and I've also seen people overestimating their requirements and wasting huge amounts of food, which sparked an idea in our head to solve the two problems by bridging the gap between them using Technology.

## What it does
If a person finds a homeless while passing by, they can seamlessly use the website to checkin and mark the location for the homeless person. Alternatively, If I have some excess food, then instead of throwing the food, we can share the food by locating a homeless person in our proximity.

## How we built it
We used HTML, CSS, Javascript to create the frontend with Php for firing the database queries. For database, we are using Google cloud SQL service and hosting the web page on the Google app engine.

## Challenges we ran into
We started using Amazon Web Services but due to credit limits and account activation problems, we had to switch to Google cloud and use its services. Speed of internet was issue due to which we faced latency in the updation of the entries in the database.

## Accomplishments that we're proud of
Working on an idea which can help a homeless get a meal and simultaneously, prevent wastage of food. Also, switching over to Google cloud services from AWS midway proved to be challenging but instead of the steep learning curve we were able to successfully host our web application.

## What we learned
We always need to have a backup plan incase of any unforeseen circumstances. Also, time management along with working in a modular structure. Selection of suitable API's and frameworks to achieve the desired goal.

## What's next for Feed A Homeless
Integration of the application with the Homeless Shelters and develop a mobile app for the same.

## Built With
1. javascript
2. html5
3. php5
4. css3
5. google-cloud-sql
6. google-app-engine
7. api
8. sql
9. google-cloud

## File Description
1. The main webpage of the website is index.php
2. All the CSS files and links are provided in the css folder. Along with this, the other folder includes the background image and the javascript files.
3. It links to the location.php, which includes the checkin locations of all the homeless people displayed on the google maps.
