<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="contactApp">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <title>Send a Contactform with Angular</title>
</head>

<body>
    <div class="wrapper" ng-controller="ContactCtrl">
        <div class="content box white round">
            <div id="message" class="alert box round" ng-click="close('message')" ng-show="message">{{message}}</div>
            <form name="contactForm" ng-submit="contactSend()">
                <label for="name">Name</label>
                <input type="text" name="name" class="round" placeholder="John Doe" ng-model="contact.name" ng-class="{ 'error' : err.name }">
                <label for="alias">Alias</label>
                <input type="text" name="alias" class="round" placeholder="Jonny" ng-model="contact.alias" ng-class="{ 'error' : err.alias }">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="round" placeholder="Jonny@something.com" ng-model="contact.email" ng-class="{ 'error' : err.email }">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" class="round" placeholder="+46 70 11 222 33" ng-model="contact.phone" ng-class="{ 'error' : err.phone }">
                <label for="message">Message</label>
                <textarea name="message" class="round" rows="10" ng-model="contact.message" ng-class="{ 'error' : err.message }"></textarea>
                <button type="submit" class="green">SEND</button>
            </form>
        </div>
    </div>
</body>
</html>