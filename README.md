# Buto-Plugin-ElementSee_more

<p>If a div elements contains much text and you do not want user to scroll down one could use this plugin to prevent that. </p>

<a name="key_0"></a>

## Widgets



<a name="key_0_0"></a>

### widget_include

<p>Add script in document head section.</p>
<pre><code>type: widget
data:
  plugin: 'element/see_more'
  method: include</code></pre>

<a name="key_0_1"></a>

### widget_text

<p>Add a widget on a page. </p>
<ul>
<li>Creates a div element with a height of 40px.</li>
<li>If text is hidden a button is added to show more/less text.</li>
</ul>
<pre><code>type: widget
data:
  plugin: element/see_more
  method: text
  data:
    text: 'A lot of text. A lot of text. A lot of text. A lot of text. A lot of text. A lot of text. A lot of text.'</code></pre>

