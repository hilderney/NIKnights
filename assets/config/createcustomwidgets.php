<?php
/*
  =====================================================
    AD 300 x 250
  =====================================================
*/
  class nik_ad_300x250 extends WP_Widget {

  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'ad_widget_300x250', 'description' => 'Usa o código de anúncios internos do site' );
    parent::__construct( 'ad_300x250', 'AD 300x250', $widget_options );
  }


  // Create the widget output.
  public function widget( $args, $instance ) {
  	$title = apply_filters( 'widget_title', $instance[ 'title' ] );
    echo $args['before_widget'] . $args['before_title'] . ' ' . $args['after_title']; ?>
    
  <div id="ad-300x250" class="ad"></div>
	<script>
    var baseUrl = window.location.protocol + "//" +  window.location.host + "/" +  window.location.pathname.split('/')[0];
    var url = '';
		(baseUrl.indexOf('localhost') > 0) ? url = baseUrl + window.location.pathname.split('/')[1] : url = baseUrl;

    jQuery(document).ready(function($) {
      $( "#ad-300x250" ).load( url + "/wp-content/themes/niknights/assets/ad/banner300x250/html/<?= $title ?>-300x250.html", function( response, status, xhr ) {
        if ( status == "error" ) {
          var msg = "Sorry but there was an error: ";
          $("#ad-300x250").html( msg + xhr.status + " " + xhr.statusText );
        }
      });
    });
	</script>

    <?php echo $args['after_widget'];
  }

  // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Título da Campanha:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
      <br>
      <span>
        Título da Campanha deve ser o nome do arquivo HTML em "assets/ad/banner300x250/html/$título$.html"
      </span>
    </p><?php
  }

  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    return $instance;
  }

}


/*
  =====================================================
    AD 300 x 600
  =====================================================
*/
class nik_ad_300x600 extends WP_Widget {

  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'ad_widget_300x600', 'description' => 'Usa o código de anúncios internos do site' );
    parent::__construct( 'ad_300x600', 'AD 300x600', $widget_options );
  }


  // Create the widget output.
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    echo $args['before_widget'] . $args['before_title'] . ' ' . $args['after_title']; ?>
    
    <div id="ad-300x600" class="ad"></div>
    <script>
      var baseUrl = window.location.protocol + "//" +  window.location.host + "/" +  window.location.pathname.split('/')[0];
      var url = '';
      (baseUrl.indexOf('localhost') > 0) ? url = baseUrl + window.location.pathname.split('/')[1] : url = baseUrl;
      jQuery(document).ready(function($) {
        $( "#ad-300x600" ).load( url + "/wp-content/themes/niknights/assets/ad/banner300x600/html/<?= $title ?>-300x600.html", function( response, status, xhr ) {
          if ( status == "error" ) {
            var msg = "Sorry but there was an error: ";
            $("#ad-300x600").html( msg + xhr.status + " " + xhr.statusText );
          }
        });
      });
    </script>

    <?php echo $args['after_widget'];
  }

  // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Título da Campanha:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
      <br>
      <span>
        Título da Campanha deve ser o nome do arquivo HTML em "assets/ad/banner300x600/html/$título$.html"
      </span>
    </p><?php
  }

  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    return $instance;
  }
}

/*
  =====================================================
    AD 728 x 90
  =====================================================
*/
class nik_ad_728x90 extends WP_Widget {
  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'ad_widget_728x90', 'description' => 'Usa o código de anúncios internos do site' );
    parent::__construct( 'ad_728x90', 'AD 728x90', $widget_options );
  }
  // Create the widget output.
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    echo $args['before_widget'] . $args['before_title'] . ' ' . $args['after_title']; ?>
  
    <div id="ad-728x90" class="ad"></div>
    <script>
      var baseUrl = window.location.protocol + "//" +  window.location.host + "/" +  window.location.pathname.split('/')[0];
      var url = '';
      (baseUrl.indexOf('localhost') > 0) ? url = baseUrl + window.location.pathname.split('/')[1] : url = baseUrl;
      debugger;
      console.log(url + "/wp-content/themes/niknights/assets/ad/superbanner728x90/html/<?= $title ?>-728x90.html");
      jQuery(document).ready(function($) {
        $( "#ad-728x90" ).load( url + "/wp-content/themes/niknights/assets/ad/superbanner728x90/html/<?= $title ?>-728x90.html", function( response, status, xhr ) {
          if ( status == "error" ) {
            var msg = "Sorry but there was an error: ";
            $("#ad-728x90").html( msg + xhr.status + " " + xhr.statusText );
          }
        });
      });
    </script>
    <?php echo $args['after_widget'];
  }
  // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Título da Campanha:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
      <br>
      <span>
        Título da Campanha deve ser o nome do arquivo HTML em "assets/ad/banner300x600/html/$título$.html"
      </span>
    </p><?php
  }
  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    return $instance;
  }
}

/*
  =====================================================
    AD 300 x 250 Random
  =====================================================
*/
class nik_ad_300x250_rnd extends WP_Widget {
  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'ad_widget_300x250_rnd', 'description' => 'Usa o código de anúncios internos do site' );
    parent::__construct( 'ad_300x250_rnd', 'AD 300 x 250 Random', $widget_options );
  }
  // Create the widget output.
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    echo $args['before_widget'] . $args['before_title'] . ' ' . $args['after_title']; ?>
  
    <div id="ad-300x250_rnd" class="ad"></div>
    <script>
      var baseUrl = window.location.protocol + "//" +  window.location.host + "/" +  window.location.pathname.split('/')[0];
      var url = '';
      (baseUrl.indexOf('localhost') > 0) ? url = baseUrl + window.location.pathname.split('/')[1] : url = baseUrl;
      jQuery(document).ready(function($) {
        $( "#ad-300x250_rnd" ).load( url + "/wp-content/themes/niknights/assets/ad/banner300x250_rnd/html/<?= $title ?>-300x250.html", function( response, status, xhr ) {
          if ( status == "error" ) {
            var msg = "Sorry but there was an error: ";
            $("#ad-300x250_rnd").html( msg + xhr.status + " " + xhr.statusText );
          }
        });
      });
    </script>
    <?php echo $args['after_widget'];
  }
  // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Título da Campanha:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
      <br>
      <span>
        Título da Campanha deve ser o nome do arquivo HTML em "assets/ad/banner300x250_rnd/html/$título$.html"
      </span>
    </p><?php
  }
  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    return $instance;
  }
}


/*
  =====================================================
    AD 300 x 250 Random
  =====================================================
*/
class nik_ad_300x600_rnd extends WP_Widget {
  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'ad_widget_300x600_rnd', 'description' => 'Usa o código de anúncios internos do site' );
    parent::__construct( 'ad_300x600_rnd', 'AD 300 x 600 Random', $widget_options );
  }
  // Create the widget output.
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    echo $args['before_widget'] . $args['before_title'] . ' ' . $args['after_title']; ?>
  
    <div id="ad-300x600_rnd" class="ad"></div>
    <script>
      var baseUrl = window.location.protocol + "//" +  window.location.host + "/" +  window.location.pathname.split('/')[0];
      var url = '';
      (baseUrl.indexOf('localhost') > 0) ? url = baseUrl + window.location.pathname.split('/')[1] : url = baseUrl;
      jQuery(document).ready(function($) {
        $( "#ad-300x600_rnd" ).load( url + "/wp-content/themes/niknights/assets/ad/banner300x600_rnd/html/<?= $title ?>-300x600.html", function( response, status, xhr ) {
          if ( status == "error" ) {
            var msg = "Sorry but there was an error: ";
            $("#ad-300x600_rnd").html( msg + xhr.status + " " + xhr.statusText );
          }
        });
      });
    </script>
    <?php echo $args['after_widget'];
  }
  // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Título da Campanha:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
      <br>
      <span>
        Título da Campanha deve ser o nome do arquivo HTML em "assets/ad/banner300x600_rnd/html/$título$.html"
      </span>
    </p><?php
  }
  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    return $instance;
  }
}

/*
  =====================================================
    AD 728 x 90 Random
  =====================================================
*/
class nik_ad_728x90_rnd extends WP_Widget {
  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'ad_widget_728x90_rnd', 'description' => 'Usa o código de anúncios internos do site' );
    parent::__construct( 'ad_728x90_rnd', 'AD 728 x 90 Random', $widget_options );
  }
  // Create the widget output.
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    echo $args['before_widget'] . $args['before_title'] . ' ' . $args['after_title']; ?>
  
    <div id="ad-728x90_rnd" class="ad"></div>
    <script>
      var baseUrl = window.location.protocol + "//" +  window.location.host + "/" +  window.location.pathname.split('/')[0];
      var url = '';
      (baseUrl.indexOf('localhost') > 0) ? url = baseUrl + window.location.pathname.split('/')[1] : url = baseUrl;
      jQuery(document).ready(function($) {
        $( "#ad-728x90_rnd" ).load( url + "/wp-content/themes/niknights/assets/ad/superbanner728x90_rnd/html/<?= $title ?>-728x90.html", function( response, status, xhr ) {
          if ( status == "error" ) {
            var msg = "Sorry but there was an error: ";
            $("#ad-728x90_rnd").html( msg + xhr.status + " " + xhr.statusText );
          }
        });
      });
    </script>
    <?php echo $args['after_widget'];
  }
  // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Título da Campanha:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
      <br>
      <span>
        Título da Campanha deve ser o nome do arquivo HTML em "assets/ad/banner728x90_rnd/html/$título$.html"
      </span>
    </p><?php
  }
  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    return $instance;
  }
}


// Register the widget.
function nik_register_ad_widget() { 
  register_widget( 'nik_ad_300x250' );
  register_widget( 'nik_ad_300x600' );
  register_widget( 'nik_ad_728x90' );
  register_widget( 'nik_ad_300x250_rnd' );
  register_widget( 'nik_ad_300x600_rnd' );
  register_widget( 'nik_ad_728x90_rnd' );
}

add_action( 'widgets_init', 'nik_register_ad_widget' );