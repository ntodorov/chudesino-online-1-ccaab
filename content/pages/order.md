---
sections:
  - title: Регистрация за "Стани Супергерой!"
    title_align: left
    content: >
      #### Чудесно решение!


      Вашето дете заслужава преживяването и знанията от курса "Стани
      Супергерой!"


      Моля попълнете вашите данни и изберете подходящия за вас [пакет](/prices)
      и след това натиснете бутона "Изпрати"


      Ако искате да регистрирате повече от едно дете, моля напишете имената в
      секцията "Въпроси?" или изпратете нова регистрация за всяко дете.
    content_align: left
    form_position: bottom
    form_width: fifty
    form_layout: stacked
    enable_card: true
    form_id: registration
    form_action: order.php
    form_fields:
      - input_type: text
        label: Име на Родител
        options: []
        is_required: true
        type: form_field
        name: client
      - input_type: email
        name: email
        label: e-mail
        options: []
        is_required: true
        type: form_field
      - input_type: tel
        label: Телефон / GSM
        options: []
        is_required: true
        type: form_field
        name: phone
      - input_type: text
        label: Име на детето (бъдещия Супергерой)
        options: []
        is_required: false
        type: form_field
        name: kid
      - input_type: select
        label: Пакет
        options:
          - <избери пакет>
          - Супергерой
          - Макси Супергерой
          - Титан Супергерой
        is_required: true
        type: form_field
        name: package
      - input_type: textarea
        options: []
        is_required: false
        type: form_field
        name: notes
        default_value: Нека поговорим - място за вашите въпроси към екипа.
        label: Въпроси?
    submit_label: Изпрати
    align_vert: top
    padding_top: medium
    padding_bottom: medium
    has_border: false
    background_color: none
    background_image_opacity: 0
    background_image_size: cover
    background_image_position: center center
    background_image_repeat: no-repeat
    type: form_section
seo:
  title: ''
  description: ''
  robots: []
  extra: []
  type: stackbit_page_meta
layout: advanced
title: Поръчка
---
