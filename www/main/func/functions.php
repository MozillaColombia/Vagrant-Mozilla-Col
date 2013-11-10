<?php


/* Get Comunity members */
function comunidad () {

    $role_filter = array(
                 'Administrator',
                 'Author',
                 'Contributor'
                 );

    $d = array(
                  'blog_id' => '1',
                  'role'    => $role_filter,
                  'exclude' => '1',
                  'orderby' => 'DES',
                  'number'  => '100'
                  );

    $blogusers =  @get_users( $d );

       shuffle($blogusers);

        $i=0;

      foreach ($blogusers as $user) {
        echo ' <a href="./blog/comunidad/" title="'.$user->display_name.'">';
        echo '<div>'.
            get_avatar($user->ID, $size = '100' ).
            '</div>';
        echo '</a>';
        $i++;
        if($i==6) break;
      }

}


