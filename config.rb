http_path = "www"
css_dir = "www"
sass_dir = "scss"
images_dir = "www/img"

# disable creating cache folder
cache = false

# generate endlines in linux style
sass_options = {:unix_newlines => true}

output_style = :expanded
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
#relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
