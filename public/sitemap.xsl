<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:s="http://www.sitemaps.org/schemas/sitemap/0.9"
    exclude-result-prefixes="s">

    <xsl:output method="html" indent="yes" />

    <xsl:template match="/">
        <html>
        <head>
            <title>Sitemap</title>
            <style>
                body { font-family: Arial, sans-serif; background: #f8f9fa; }
                table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                th, td { padding: 10px; border-bottom: 1px solid #ddd; }
                th { background: #4275f4; color: white; text-align: left; }
                tr:hover { background: #eef; }
                tr:nth-child(even) { background-color: #ebf0ffff;}
            </style>
        </head>
        <body style="margin: 0;">
            <div style="background: #4275f4; padding: 30px 30px 20px; color: #fff; font-size: 14px;">
                <h1 style="margin: 0;">Value Ceylon Sitemap XML</h1>
                <p>This sitemap provides a structured list of all the important URLs on the Value Ceylon website, helping search engines to crawl and index the site effectively.</p>
            </div>

            <div style="padding: 20px; font-size: 14px;">
                <table>
                    <tr>
                        <th>URL</th>
                        <th>Change Frequency</th>
                        <th>Priority</th>
                    </tr>
                    <xsl:for-each select="/s:urlset/s:url">
                        <tr>
                            <td><a href="{s:loc}"><xsl:value-of select="s:loc"/></a></td>
                            <td><xsl:value-of select="s:changefreq"/></td>
                            <td><xsl:value-of select="s:priority"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </div>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
