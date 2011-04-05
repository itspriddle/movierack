(function ($) {
  $(document).ready(function() {
    $('#directory-list table a').each(function() {
      var self = $(this),
          file = self.text(),
          name = file.replace(/\.([a-z0-9]{3})$/i, ''),
          href = self.attr('href'),
          ext  = file.match(/.*\.([a-z0-9]{3})$/i),
          html = '<li><a href="' + href + '"' +
                 (!! ext ? ' class="download"' : '') +
                 '>' + name + "</a></li>\n";

      $('#file-list').append(html);
    });
  });
})(jQuery);
