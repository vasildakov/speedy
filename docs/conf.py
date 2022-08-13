import sys, os
from sphinx.highlighting import lexers
from pygments.lexers.web import PhpLexer


lexers['php'] = PhpLexer(startinline=True, linenos=1)
lexers['php-annotations'] = PhpLexer(startinline=True, linenos=1)
primary_domain = 'php'

extensions = []
templates_path = ['_templates']
source_suffix = '.rst'
master_doc = 'index'
project = u'Speedy'
copyright = u'2022, Vasil Dakov'
version = '1'
html_title = "Speedy API Client Documentation"
html_short_title = "Speedy API"

exclude_patterns = ['_build']
html_static_path = ['_static']