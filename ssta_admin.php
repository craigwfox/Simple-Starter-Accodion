<?php 
?>
  <div class="ssta-admin">
    <h1 class="ssta-admin__title">Instructions</h1>

    <div class="ssta-admin__instructions">
      <h2 class="ssta-admin__subtitle">Shortcodes</h2>
      <h3>Wraps each accordion pair</h3>
      <p>[accordion_section] [/accordion_section]</p>
      
      <h3>Wraps the Accordion Title</h3>
      <p>[accordion_title] [/accordion_title]</p>

      <h3>Wraps the content of the accordion</h3>
      <p>[accordion_content] [/accordion_content]</p>
    </div>

    <div class="ssta-admin__example">
      <h2 class="ssta-admin__subtitle">Usage Example</h2>
      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[accordion_section]</span>
          <span class="ssta-admin__scode">[accordion_title]</span>
            &lt;h2&gt; Your Title Here &lt;/h2&gt;
          <span class="ssta-admin__scode">[/accordion_title]</span>
          <span class="ssta-admin__scode">[accordion_content]</span>
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
          <span class="ssta-admin__scode">[/accordion_content]</span>
        <span class="ssta-admin__scode">[/accordion_section]</span>
      </pre>
    </div>
  </div>