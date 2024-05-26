<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8"/>
    <xsl:template match="/flori">
        <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
            </head>
            <body>
                <div class="container mt-5">
                    <div class="list-group">
                        <xsl:for-each select="floare">
                            <a class="list-group-item list-group-item-action">
                                <h5 class="mb-1"><xsl:value-of select="nume"/></h5>
                                <p class="mb-1">Color: <xsl:value-of select="culoare"/></p>
                                <p class="mb-1">Size: <xsl:value-of select="marime"/></p>
                                <p class="mb-1">Price: <xsl:value-of select="pret"/> RON</p>
                            </a>
                        </xsl:for-each>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
