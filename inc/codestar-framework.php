<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = '_postkasse_options';
    /************************************************************************/
    // Theme Options settings
    /***************************************************************************/
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Postkasse',
        'menu_slug'  => 'postkasse_options',
      ) );


      CSF::createSection( $prefix, array(
        'title'  => 'Overview',
        'icon'   => 'fas fa-rocket',
        'fields' => array(
      
          //
          // A text field
          //
          array(
            'id'    => 'opt-text',
            'type'  => 'text',
            'title' => 'Text',
          ),
      
          array(
            'id'    => 'opt-textarea',
            'type'  => 'textarea',
            'title' => 'Textarea',
            'help'  => 'The help text of the field.',
          ),
      
          array(
            'id'    => 'opt-upload',
            'type'  => 'upload',
            'title' => 'Upload',
          ),
      
          array(
            'id'    => 'opt-switcher',
            'type'  => 'switcher',
            'title' => 'Switcher',
            'label' => 'The label text of the switcher.',
          ),
      
          array(
            'id'      => 'opt-color',
            'type'    => 'color',
            'title'   => 'Color',
            'default' => '#3498db',
          ),
      
          array(
            'id'    => 'opt-checkbox',
            'type'  => 'checkbox',
            'title' => 'Checkbox',
            'label' => 'The label text of the checkbox.',
          ),
      
          array(
            'id'      => 'opt-radio',
            'type'    => 'radio',
            'title'   => 'Radio',
            'options' => array(
              'yes'   => 'Yes, Please.',
              'no'    => 'No, Thank you.',
            ),
            'default' => 'yes',
          ),
      
          array(
            'id'          => 'opt-select',
            'type'        => 'select',
            'title'       => 'Select',
            'placeholder' => 'Select an option',
            'options'     => array(
              'opt-1'     => 'Option 1',
              'opt-2'     => 'Option 2',
              'opt-3'     => 'Option 3',
            ),
          ),
      
          array(
            'id'      => 'opt-image-select',
            'type'    => 'image_select',
            'title'   => 'Image Select',
            'options' => array(
              'opt-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
              'opt-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
              'opt-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
              'opt-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
              'opt-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
            ),
            'default' => 'opt-1',
          ),
      
          array(
            'id'    => 'opt-background',
            'type'  => 'background',
            'title' => 'Background',
          ),
      
          array(
            'type'    => 'notice',
            'style'   => 'success',
            'content' => 'A <strong>notice</strong> field with <strong>success</strong> style.',
          ),
      
          array(
            'id'    => 'opt-icon',
            'type'  => 'icon',
            'title' => 'Icon',
          ),
      
          array(
            'id'    => 'opt-alt-text',
            'type'  => 'text',
            'title' => 'Text',
          ),
      
          array(
            'id'         => 'opt-alt-textarea',
            'type'       => 'textarea',
            'title'      => 'Textarea',
            'subtitle'   => 'A textarea with shortcoder.',
            'shortcoder' => 'csf_demo_shortcodes',
          ),
      
        )
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
                    'default'  => 'Contact',
                    'validate' => 'csf_validate_required',
                    'attributes' => array(
                        'style'    => 'width: 100%;'
                    ),
                ),

                array(
                    'id'       => 'header_left_btn_icon',
                    'type'     => 'icon',
                    'title'    => 'Select Icon',
                    'default' => 'fas fa-phone',
                    'compiler'  => 'false',
                ),
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
            )
            ));
    
  
  }
  

?>