<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\colegiop/templates/jl_meta_lite/blueprints/styles/feature.yaml',
    'modified' => 1663251394,
    'data' => [
        'name' => 'Feature Styles',
        'description' => 'Feature styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#24222c'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => ''
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
