// public/js/script.js

$(document).ready(function() {
    $.ajax({
        url: 'https://jsonplaceholder.typicode.com/posts',
        type: 'GET',
        success: function(posts) {
            var tableBody = $('#post-table tbody');

            $.each(posts, function(index, post) {
                tableBody.append('<tr><td>' + post.id + '</td><td>' + post.title + '</td><td>' + post.body + '</td></tr>');
            });
        }
    });
});
