<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = '_postkasse_options';
    /************************************************************************/
    // Theme Options settings
    /***************************************************************************/
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Postkasse',
        'menu_slug'  => 'postkasse_options',
        'framework_title'         => '<img src="'.get_template_directory_uri(). '/assets/images/postkasse-white.png" style="width:200px;"><small> by combrokers team</small>',
        'framework_class'         => '',
      ) );
  
    /************************************************************************/
    // Theme basic settings
    /***************************************************************************/
    CSF::createSection( $prefix, array(
        'id'    => 'basic_settings',
        'title' => 'Basic Settings',
        'icon'  => 'fas fa-cogs',
    ) );

        /************************************************************************/
        // Theme basic header settings
        /***************************************************************************/

        CSF::createSection( $prefix, array(
            'parent'      => 'basic_settings',
            'title'       => 'Header Settings',
            'description' => 'This field will manage your theme header logo settings',
            'fields'      => array(
        
                array(
                    'id'    => 'main-logo',
                    'type'  => 'media',
                    'title' => 'Main Logo',
                    'subtitle'  => __('Upload your logo', 'postkasse' ),
                    'default'   => array('url' => get_template_directory_uri(). '/assets/images/postkase.png'),
                ),

                array(
                    'id'    => 'main-secondary-logo',
                    'type'  => 'media',
                    'title' => 'Secondary Logo',
                    'subtitle'  => __('Upload your logo', 'postkasse' ),
                    'default'   => array('url' => get_template_directory_uri(). '/assets/images/postkase.png'),
                ),

                array(
                    'id'    => 'main-favicon',
                    'type'  => 'media',
                    'title' => 'Upload Your Favicon',
                    'subtitle'  => __('Upload your favicon', 'postkasse' ),
                    'default'   => array('url' => get_template_directory_uri(). '/assets/images/favicon.png'),
                ),

                array(
                    'type'    => 'subheading',
                    'content' => 'Update Right Side Button',
                ),
                array(
                    'id'       => 'header_left_btn_text',
                    'type'     => 'text',
                    'title'    => 'Enter Button Text',
                    'subtitle' => 'This text field is required, cannot be pass empty.',
                    'default'  => __('Contact', 'postkasse'),
                    'validate' => 'csf_validate_required',
                    'attributes' => array(
                        'style'    => 'width: 100%;'
                    ),
                ),

                // array(
                //     'id'       => 'header_left_btn_icon',
                //     'type'     => 'icon',
                //     'title'    => 'Select Icon',
                //     'default' => 'fas fa-phone',
                //     'compiler'  => 'false',
                // ),
            )
        ) );
    
        /************************************************************************/
        // Theme basic Footer settings
        /***************************************************************************/
        CSF::createSection( $prefix, array(
            'parent'      => 'basic_settings',
            'title'       => 'Footer Settings',
            'description' => 'This field will manage your theme footer widgets settings',
            'fields'      => array(
        
                array(
                    'id'    => 'footer-logo',
                    'type'  => 'media',
                    'title' => 'Footer Logo',
                    'subtitle'  => __('Upload your logo', 'postkasse' ),
                    'default'   => array('url' => get_template_directory_uri(). '/assets/images/postkase.png'),
                ),

                array(
                    'type'    => 'subheading',
                    'content' => 'Footer Middle Info',
                ),

                array(
                    'id'       => 'footer_heading_text',
                    'type'     => 'text',
                    'title'    => 'Enter Footer Heading',
                    'default'  => __('Fronter Digital Agency', 'postkasse'),
                    'attributes' => array('style'    => 'width: 100%;'),
                ),

                array(
                    'id'       => 'footer_middle_description',
                    'type'     => 'textarea',
                    'title'    => 'Enter Footer Description',
                    'default'  => __('Start working with Fronter that can provide everything you need to generate awareness, drive traffic, connect.', 'postkasse'),
                    'attributes' => array('style' => 'width: 100%;'),
                ),

            )
            ));

        /************************************************************************/
        // Theme basic Footer settings
        /***************************************************************************/
        CSF::createSection( $prefix, array(
          'parent'      => 'basic_settings',
          'title'       => 'Social Settings',
          'description' => 'This field will manage your theme footer widgets settings',
          'fields'      => array(
      
              array(
                  'id'       => 'footer_social_text',
                  'type'     => 'text',
                  'title'    => 'Enter Footer Heading',
                  'default'  => __('Follow us:', 'postkasse'),
                  'attributes' => array('style'    => 'width: 100%;'),
              ),

              array(
                'id'     => 'social_repeter',
                'type'   => 'repeater',
                'title'  => 'Add Footer Social Media',
                'fields' => array(
                  array(
                    'id'    => 'social_status',
                    'type'  => 'switcher',
                    'title' => 'Enable Icon',
                    'default' =>  false,
                  ),
                  array(
                    'id'    => 'social_text_link',
                    'type'  => 'textarea',
                    'title' => 'Footer Social Icon',
                    'default' =>  '#',
                  ),
                  
                )

              ),

          )
        ));

        /************************************************************************/
        // Theme basic Footer settings
        /***************************************************************************/
        CSF::createSection( $prefix, array(
            'parent'      => 'basic_settings',
            'title'       => 'Copyright Settings',
            'description' => 'This field will manage your theme footer widgets settings',
            'fields'      => array(
        
                array(
                    'id'       => 'footer_copyright_text',
                    'type'     => 'textarea',
                    'title'    => 'Enter Footer Copyright Text',
                    'default'  => __('<p class="mb-0">© <script>document.write(new Date().getFullYear())</script>2022 Postkasse. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://combrokers.no/" target="_blank" class="text-reset">Combrokers</a>.</p>', 'postkasse'),
                    'attributes' => array('style'    => 'width: 100%;'),
                ),
            )
          )
        );
    

    /************************************************************************/
    // Theme frontend settings
    /***************************************************************************/
    CSF::createSection( $prefix, array(
        'id'    => 'frontend_settings',
        'title' => 'Front Page Settings',
        'icon'  => 'fas fa-home',
    ) );

      /************************************************************************/
      // Theme Frontendt settings
      /***************************************************************************/

      CSF::createSection( $prefix, array(
        'parent'      => 'frontend_settings',
        'title'       => 'Hero Section Settings',
        'description' => 'This settings will maange your hompage all the contents. Explore the settngs and configure it as you want.',
        'fields'      => array(
    
          array(
            'id'       => 'hero_subheading',
            'type'     => 'text',
            'title'    => 'Enter subheading text',
            'default'  => __('We are a very dedicated team', 'postkasse'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'id'       => 'hero_mainheading',
            'type'     => 'text',
            'title'    => 'Enter Heading text',
            'default'  => __('We are a full-service in', 'postkasse'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'id'     => 'hero_text_animation_repeter',
            'type'   => 'repeater',
            'title'  => 'Add Animation Text',
            'fields' => array(
              array(
                'id'    => 'hero_animation_text',
                'type'  => 'text',
                'title' => 'Animation Text',
                'default' =>  'Teachnology',
              ),
              
            )

          ),
          array(
              'type'    => 'subheading',
              'content' => 'Hero section description',
          ),
          array(
            'id'       => 'hero_description',
            'type'     => 'textarea',
            'title'    => 'Enter Description',
            'default'  => __('We collaborate with people, teams, and businesses to develop design systems, strategies, and processes to do a better creative work everyday.', 'postkasse'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'type'    => 'subheading',
            'content' => 'Hero section Video Settings',
          ),
          array(
            'id'       => 'hero_video_text',
            'type'     => 'text',
            'title'    => 'Video text',
            'default'  => __('Watch Now', 'postkasse'),
            'attributes' => array('style' => 'width: 100%;'),
          ),
          array(
            'id'       => 'hero_video_link',
            'type'     => 'text',
            'title'    => 'Video Link',
            'default'  => __('https://www.youtube.com/embed/Jfrjeg26Cwk', 'postkasse'),
            'attributes' => array('style' => 'width: 100%;'),
          ),
          array(
            'type'    => 'subheading',
            'content' => 'Hero section Images Settings',
          ),
          array(
            'id'    => 'hero-right-image1',
            'type'  => 'media',
            'title' => 'Hero Small Image',
            'subtitle'  => __('Upload your Image', 'postkasse' ),
            'default'   => array('url' => get_template_directory_uri(). '/assets/images/digital/02.jpg'),
          ),
          array(
            'id'    => 'hero-right-image2',
            'type'  => 'media',
            'title' => 'Hero Large Image',
            'subtitle'  => __('Upload your Image', 'postkasse' ),
            'default'   => array('url' => get_template_directory_uri(). '/assets/images/digital/01.jpg'),
          ),
        )
      ));
      /************************************************************************/
      // Theme Frontend settings
      /***************************************************************************/

      CSF::createSection( $prefix, array(
        'parent'      => 'frontend_settings',
        'title'       => 'How its Work Settings',
        'description' => 'This settings will maange your hompage all the contents. Explore the settngs and configure it as you want.',
        'fields'      => array(
    
          array(
            'id'       => 'hiws_headings',
            'type'     => 'text',
            'title'    => 'Enter Heading Text',
            'default'  => __('Agency Features', 'postkasse'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'id'       => 'hiws_description',
            'type'     => 'textarea',
            'title'    => 'Enter Description',
            'default'  => __('Start working with Fronter that can provide everything you need to generate awareness, drive traffic, connect.', 'postkasse'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'type'    => 'subheading',
            'content' => 'Box Settings with icons',
          ),
          array(
            'id'     => 'hiws_items',
            'type'   => 'repeater',
            'title'  => 'Add New Box',
            'fields' => array(
              array(
                'id'    => 'hiws_box_icons',
                'type'  => 'text',
                'title' => 'Heading Icon',
              ),
              array(
                'id'    => 'hiws_box',
                'type'  => 'text',
                'title' => 'Heading Text',
              ),
              array(
                'id'    => 'hiws_box_desc',
                'type'  => 'textarea',
                'title' => 'Description Text',
              ),
              
            )

          ),
        )
      ));
  }
  

?>