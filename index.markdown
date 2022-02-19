---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: page
---

<ul>
  {% for post in site.posts %}
    <li>
      <a href="{{ post.url }}">{{ post.title }}</a>
      {% for category in post.categories %}
        {{category}}
      {% endfor %}

      {% for tag in post.tags %}
        {{tag}}
      {% endfor %}
    </li>
  {% endfor %}
</ul>