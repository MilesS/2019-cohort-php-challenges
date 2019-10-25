<?php
    //$postID = strip_tags($_GET['postID']); 
    $postID = htmlspecialchars( strip_tags( $_GET['postID'] ) );

    //for database work;
    //mysql_real_escape_string();

    $dirtyID = $_GET['postID'];
    echo 'clean: ' . $postID;
    echo 'dirty: ' . $dirtyID;

    function currentPost($posts, $id) {
        return $posts[$id];
    }
  
    $posts = [
        [
            'author' => 'John Doe',
            'title' => 'Post 1',
            'content' => 'Description',
            'image' => 'https://picsum.photos/id/1/200/300'
        ],
        [
            'author' => 'John Doe',
            'title' => 'Post 2',
            'content' => 'Description 2',
            'image' => 'https://picsum.photos/id/1/200/300'
        ],
        [
            'author' => 'Miles',
            'title' => 'Post 3',
            'content' => 'Description 3',
            'image' => 'https://picsum.photos/id/1/200/300'
        ]
    ];

    foreach ( $posts as $post ) {
        foreach ( $post as $key=>$item ) {
            echo '<p>' . $key . ': '. $item . '</p>';
        }
    }

    foreach ( $posts as $post ) {
        if ( $post['author'] == 'John Doe') {
            echo '<p>Written by ' . $post['author'] . '</p>';
        }
    }

    $thisPost = currentPost($posts, $postID); ?>

    <h1><?php echo $thisPost['title'] ?></h1>

    <p>Written By: <?php echo $thisPost['author'] ?></p>

    <img src="<?php echo $thisPost['image'] ?>" />

    <p><?php echo $thisPost['content'] ?></p>
