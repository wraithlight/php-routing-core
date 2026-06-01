<?php
class SwadocController
{
  public function getSwadoc()
  {
    echo "openapi: 3.0.3\n";
    echo "info:\n";
    echo "  title: Test API\n";
    echo "  version: 1.0.0\n";
    echo "  description: Simple test endpoint.\n";
    echo "\n";
    echo "paths:\n";
    echo "  /test/get:\n";
    echo "    get:\n";
    echo "      summary: Test GET endpoint\n";
    echo "      operationId: testGetFn\n";
    echo "      tags:\n";
    echo "        - Test\n";
    echo "      responses:\n";
    echo "        '200':\n";
    echo "          description: Successful response\n";
    echo "          content:\n";
    echo "            text/plain:\n";
    echo "              schema:\n";
    echo "                type: string\n";
    echo "                example: testGetFn\n";
  }
}
?>
