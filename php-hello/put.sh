lftp << END

open -u sg982zc,csqsij ftp://ftp.chobi.net
cd public_html/.
put hello.php
