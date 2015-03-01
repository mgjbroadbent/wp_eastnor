<?php

function es_newsletter_layout_1($layouts) {
  $layouts['newsletter-v1'] = array(
    'name' => __('Eastnor Express v1'),
    'widgets' => 
    array (
      0 => 
      array (
        'title' => 'School News',
        'text' => '',
        'filter' => false,
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Text',
          'raw' => false,
          'grid' => 0,
          'cell' => 0,
          'id' => 0,
          'style' => 
          array (
            'class' => 'es-title',
            'background_display' => 'tile',
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'visual',
        'title' => 'School News 1',
        'text' => '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><p>Some sort of school news</p></div></div></div>',
        'filter' => '1',
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'grid' => 0,
          'cell' => 0,
          'id' => 1,
          'style' => 
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'visual',
        'title' => 'School News 2',
        'text' => '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><p>Some sort of school news</p></div></div></div>',
        'filter' => '1',
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'grid' => 0,
          'cell' => 0,
          'id' => 2,
          'style' => 
          array (
            'background_display' => 'tile',
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'visual',
        'title' => 'School News 3',
        'text' => '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><p>Some sort of school news</p></div></div></div>',
        'filter' => '1',
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'grid' => 0,
          'cell' => 0,
          'id' => 3,
          'style' => 
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'visual',
        'title' => 'Diary Dates for Next Week',
        'text' => '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><strong>Monday 26th January:</strong></div><div class="column">Class 4 swimming</div><div class="column"> </div><div class="column"><strong>Tuesday 27th January:</strong></div><div class="column">Class 2 swimming</div><div class="column"> </div><div class="column"><strong>Tuesday 27th January:</strong></div><div class="column">KS2 football &amp; netball matches</div></div></div>',
        'filter' => '1',
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'raw' => false,
          'grid' => 0,
          'cell' => 1,
          'id' => 4,
          'style' => 
          array (
            'class' => 'es-notice',
            'padding' => '15px',
            'background' => '#f0f0f0',
            'background_display' => 'tile',
            'border_color' => '#0c0c0c',
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'visual',
        'title' => 'Year Specific Dates',
        'text' => '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><strong>Tuesday 28th April:</strong></div><div class="column">Something happens</div><div class="column"> </div><div class="column"><strong>Thursday 25th June (6:30-8pm):</strong></div><div class="column">Something else happens</div><div class="column"> </div></div></div>',
        'filter' => '1',
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'grid' => 0,
          'cell' => 1,
          'id' => 5,
          'style' => 
          array (
            'class' => 'es-notice',
            'padding' => '15px',
            'background' => '#f0f0f0',
            'background_image_attachment' => false,
            'background_display' => 'tile',
            'border_color' => '#0c0c0c',
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'visual',
        'title' => 'School News 3',
        'text' => '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><p>Some sort of school news</p></div></div></div>',
        'filter' => '1',
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'grid' => 1,
          'cell' => 0,
          'id' => 6,
          'style' => 
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
          ),
        ),
      ),
      7 => 
      array (
        'type' => 'visual',
        'title' => 'School News 4',
        'text' => '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><p>Some sort of school news</p></div></div></div>',
        'filter' => '1',
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'grid' => 1,
          'cell' => 0,
          'id' => 7,
          'style' => 
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
          ),
        ),
      ),
      8 => 
      array (
        'title' => 'Featured Class',
        'text' => '',
        'filter' => false,
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Text',
          'raw' => false,
          'grid' => 2,
          'cell' => 0,
          'id' => 8,
          'style' => 
          array (
            'class' => 'es-title',
            'background_display' => 'tile',
          ),
        ),
      ),
      9 => 
      array (
        'type' => 'visual',
        'title' => 'Class ',
        'text' => '<div class="page" title="Page 2"><div class="layoutArea"><div class="column"><p>Insert featured class test.</p><p>Insert teachers stylised signature here from \'Add Media\'</p></div></div></div>',
        'filter' => '1',
        'panels_info' => 
        array (
          'class' => 'WP_Widget_Black_Studio_TinyMCE',
          'grid' => 2,
          'cell' => 0,
          'id' => 9,
          'style' => 
          array (
            'class' => 'es-featured',
            'background_image_attachment' => false,
            'background_display' => 'tile',
          ),
        ),
      ),
      10 => 
      array (
        'panels_data' => 
        array (
          'widgets' => 
          array (
            0 => 
            array (
              'title' => 'House Point Totals',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 0,
                'cell' => 0,
                'id' => 0,
                'style' => 
                array (
                  'class' => 'es-title',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            1 => 
            array (
              'title' => 'Castle',
              'text' => '[es meta="es_hp_castle"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 1,
                'cell' => 0,
                'id' => 1,
                'style' => 
                array (
                  'class' => 'es-housepoints-castle es-housepoints',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            2 => 
            array (
              'title' => 'Deer Park',
              'text' => '[es meta="es_hp_deerpark"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 1,
                'cell' => 1,
                'id' => 2,
                'style' => 
                array (
                  'class' => 'es-housepoints-deerpark es-housepoints',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            3 => 
            array (
              'title' => 'Land Rover',
              'text' => '[es meta="es_hp_landrover"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 1,
                'cell' => 2,
                'id' => 3,
                'style' => 
                array (
                  'class' => 'es-housepoints-landrover es-housepoints',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            4 => 
            array (
              'title' => 'Obelisk',
              'text' => '[es meta="es_hp_obelisk"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 1,
                'cell' => 3,
                'id' => 4,
                'style' => 
                array (
                  'class' => 'es-housepoints-obelisk es-housepoints',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
          ),
          'grids' => 
          array (
            0 => 
            array (
              'cells' => 1,
              'style' => 
              array (
              ),
            ),
            1 => 
            array (
              'cells' => 4,
              'style' => 
              array (
              ),
            ),
          ),
          'grid_cells' => 
          array (
            0 => 
            array (
              'grid' => 0,
              'weight' => 1,
            ),
            1 => 
            array (
              'grid' => 1,
              'weight' => 0.25,
            ),
            2 => 
            array (
              'grid' => 1,
              'weight' => 0.25,
            ),
            3 => 
            array (
              'grid' => 1,
              'weight' => 0.25,
            ),
            4 => 
            array (
              'grid' => 1,
              'weight' => 0.25,
            ),
          ),
        ),
        'builder_id' => '54f3782b07575',
        'panels_info' => 
        array (
          'class' => 'SiteOrigin_Panels_Widgets_Layout',
          'grid' => 3,
          'cell' => 0,
          'id' => 10,
          'style' => 
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
          ),
        ),
      ),
      11 => 
      array (
        'panels_data' => 
        array (
          'widgets' => 
          array (
            0 => 
            array (
              'title' => 'Pupil of the Week Awards',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 0,
                'cell' => 0,
                'id' => 0,
                'style' => 
                array (
                  'class' => 'es-title',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            1 => 
            array (
              'title' => 'Reception',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 1,
                'cell' => 0,
                'id' => 1,
                'style' => 
                array (
                  'class' => 'potw-year',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            2 => 
            array (
              'title' => '',
              'text' => '[es meta="es_pw_reception"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 1,
                'cell' => 1,
                'id' => 2,
                'style' => 
                array (
                  'class' => '',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            3 => 
            array (
              'title' => 'Year 1',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 2,
                'cell' => 0,
                'id' => 3,
                'style' => 
                array (
                  'class' => 'potw-year',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            4 => 
            array (
              'title' => '',
              'text' => '[es meta="es_pw_year1"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 2,
                'cell' => 1,
                'id' => 4,
                'style' => 
                array (
                  'class' => '',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            5 => 
            array (
              'title' => 'Year 2',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 3,
                'cell' => 0,
                'id' => 5,
                'style' => 
                array (
                  'class' => 'potw-year',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            6 => 
            array (
              'title' => '',
              'text' => '[es meta="es_pw_year2"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 3,
                'cell' => 1,
                'id' => 6,
                'style' => 
                array (
                  'class' => '',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            7 => 
            array (
              'title' => 'Year 3',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 4,
                'cell' => 0,
                'id' => 7,
                'style' => 
                array (
                  'class' => 'potw-year',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            8 => 
            array (
              'title' => '',
              'text' => '[es meta="es_pw_year3"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 4,
                'cell' => 1,
                'id' => 8,
                'style' => 
                array (
                  'class' => '',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            9 => 
            array (
              'title' => 'Year 4',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 5,
                'cell' => 0,
                'id' => 9,
                'style' => 
                array (
                  'class' => 'potw-year',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            10 => 
            array (
              'title' => '',
              'text' => '[es meta="es_pw_year4"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 5,
                'cell' => 1,
                'id' => 10,
                'style' => 
                array (
                  'class' => '',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            11 => 
            array (
              'title' => 'Year 5',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 6,
                'cell' => 0,
                'id' => 11,
                'style' => 
                array (
                  'class' => 'potw-year',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            12 => 
            array (
              'title' => '',
              'text' => '[es meta="es_pw_year5"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 6,
                'cell' => 1,
                'id' => 12,
                'style' => 
                array (
                  'class' => '',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            13 => 
            array (
              'title' => 'Year 6',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 7,
                'cell' => 0,
                'id' => 13,
                'style' => 
                array (
                  'class' => 'potw-year',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            14 => 
            array (
              'title' => '',
              'text' => '[es meta="es_pw_year6"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 7,
                'cell' => 1,
                'id' => 14,
                'style' => 
                array (
                  'class' => '',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            15 => 
            array (
              'title' => 'Headteacher Award',
              'text' => '',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 8,
                'cell' => 0,
                'id' => 15,
                'style' => 
                array (
                  'class' => 'potw-year potw-head',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
            16 => 
            array (
              'title' => '',
              'text' => '[es meta="es_pw_head"]',
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 8,
                'cell' => 1,
                'id' => 16,
                'style' => 
                array (
                  'class' => '',
                  'widget_css' => '',
                  'padding' => '',
                  'background' => '',
                  'background_image_attachment' => '0',
                  'background_display' => 'tile',
                  'border_color' => '',
                  'font_color' => '',
                ),
              ),
            ),
          ),
          'grids' => 
          array (
            0 => 
            array (
              'cells' => 1,
              'style' => 
              array (
              ),
            ),
            1 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => '',
                'cell_class' => '',
                'row_css' => '',
                'bottom_margin' => '',
                'gutter' => '',
                'padding' => '',
                'row_stretch' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
              ),
            ),
            2 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => '',
                'cell_class' => '',
                'row_css' => '',
                'bottom_margin' => '',
                'gutter' => '',
                'padding' => '',
                'row_stretch' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
              ),
            ),
            3 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => '',
                'cell_class' => '',
                'row_css' => '',
                'bottom_margin' => '',
                'gutter' => '',
                'padding' => '',
                'row_stretch' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
              ),
            ),
            4 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => '',
                'cell_class' => '',
                'row_css' => '',
                'bottom_margin' => '',
                'gutter' => '',
                'padding' => '',
                'row_stretch' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
              ),
            ),
            5 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => '',
                'cell_class' => '',
                'row_css' => '',
                'bottom_margin' => '',
                'gutter' => '',
                'padding' => '',
                'row_stretch' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
              ),
            ),
            6 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => '',
                'cell_class' => '',
                'row_css' => '',
                'bottom_margin' => '',
                'gutter' => '',
                'padding' => '',
                'row_stretch' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
              ),
            ),
            7 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => '',
                'cell_class' => '',
                'row_css' => '',
                'bottom_margin' => '',
                'gutter' => '',
                'padding' => '',
                'row_stretch' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
              ),
            ),
            8 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => '',
                'cell_class' => '',
                'row_css' => '',
                'bottom_margin' => '',
                'gutter' => '',
                'padding' => '',
                'row_stretch' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
              ),
            ),
          ),
          'grid_cells' => 
          array (
            0 => 
            array (
              'grid' => 0,
              'weight' => 1,
            ),
            1 => 
            array (
              'grid' => 1,
              'weight' => 0.2138486163625600011695127022903761826455593109130859375,
            ),
            2 => 
            array (
              'grid' => 1,
              'weight' => 0.78615138363743997107491168208071030676364898681640625,
            ),
            3 => 
            array (
              'grid' => 2,
              'weight' => 0.2138486163625600011695127022903761826455593109130859375,
            ),
            4 => 
            array (
              'grid' => 2,
              'weight' => 0.78615138363743997107491168208071030676364898681640625,
            ),
            5 => 
            array (
              'grid' => 3,
              'weight' => 0.2138486163625600011695127022903761826455593109130859375,
            ),
            6 => 
            array (
              'grid' => 3,
              'weight' => 0.78615138363743997107491168208071030676364898681640625,
            ),
            7 => 
            array (
              'grid' => 4,
              'weight' => 0.2138486163625600011695127022903761826455593109130859375,
            ),
            8 => 
            array (
              'grid' => 4,
              'weight' => 0.78615138363743997107491168208071030676364898681640625,
            ),
            9 => 
            array (
              'grid' => 5,
              'weight' => 0.2138486163625600011695127022903761826455593109130859375,
            ),
            10 => 
            array (
              'grid' => 5,
              'weight' => 0.78615138363743997107491168208071030676364898681640625,
            ),
            11 => 
            array (
              'grid' => 6,
              'weight' => 0.2138486163625600011695127022903761826455593109130859375,
            ),
            12 => 
            array (
              'grid' => 6,
              'weight' => 0.78615138363743997107491168208071030676364898681640625,
            ),
            13 => 
            array (
              'grid' => 7,
              'weight' => 0.2138486163625600011695127022903761826455593109130859375,
            ),
            14 => 
            array (
              'grid' => 7,
              'weight' => 0.78615138363743997107491168208071030676364898681640625,
            ),
            15 => 
            array (
              'grid' => 8,
              'weight' => 0.2138486163625600011695127022903761826455593109130859375,
            ),
            16 => 
            array (
              'grid' => 8,
              'weight' => 0.78615138363743997107491168208071030676364898681640625,
            ),
          ),
        ),
        'builder_id' => '54f3782b075c4',
        'panels_info' => 
        array (
          'class' => 'SiteOrigin_Panels_Widgets_Layout',
          'grid' => 4,
          'cell' => 0,
          'id' => 11,
          'style' => 
          array (
            'background_image_attachment' => false,
            'background_display' => 'tile',
          ),
        ),
      ),
    ),
    'grids' => 
    array (
      0 => 
      array (
        'cells' => 2,
        'style' => 
        array (
        ),
      ),
      1 => 
      array (
        'cells' => 1,
        'style' => 
        array (
        ),
      ),
      2 => 
      array (
        'cells' => 1,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
      3 => 
      array (
        'cells' => 1,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
      4 => 
      array (
        'cells' => 1,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    'grid_cells' => 
    array (
      0 => 
      array (
        'grid' => 0,
        'weight' => 0.70710678237309998461768145716632716357707977294921875,
      ),
      1 => 
      array (
        'grid' => 0,
        'weight' => 0.29289321762690001538231854283367283642292022705078125,
      ),
      2 => 
      array (
        'grid' => 1,
        'weight' => 1,
      ),
      3 => 
      array (
        'grid' => 2,
        'weight' => 1,
      ),
      4 => 
      array (
        'grid' => 3,
        'weight' => 1,
      ),
      5 => 
      array (
        'grid' => 4,
        'weight' => 1,
      ),
    ),
  );

  return $layouts;
}

add_filter('siteorigin_panels_prebuilt_layouts', 'es_newsletter_layout_1');
?>