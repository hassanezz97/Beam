var notificationsWrapper = $('.dropdown-notifications');
var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = notificationsWrapper.find('div.nott-list');

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('new-information-received');
// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\informationRecieved', function (data) {
    var existingNotifications = notifications.html();
    var newNotificationHtml = `<div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img style="border-radius: 100px" src="" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title=""></a>  replied to your information request.</h3>
                                                <a style="background: #A9DBE9" data-toggle="modal"
                                                data-target="#viewInformationModal"
                                                class="btn btn-success confirm-btn">View Information</a>
                                                <span style="font-size: 10px"></span>
                                            </div>

                                        </div>`;
    notifications.html(newNotificationHtml + existingNotifications);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();
});
