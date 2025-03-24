import http.server
import socketserver

PORT = 8000

class CORSRequestHandler(http.server.SimpleHTTPRequestHandler):
    def end_headers(self):
        self.send_header('Access-Control-Allow-Origin', '*')
        super().end_headers()

    def do_GET(self):
        # Set content type for JavaScript files
        if self.path.endswith('.js'):
            self.send_header('Content-type', 'application/javascript')
        super().do_GET()

handler = CORSRequestHandler
httpd = socketserver.TCPServer(("", PORT), handler)

print(f"""
Server started at http://localhost:{PORT}

To view the store:
1. Open http://localhost:{PORT}/mega-store-v2.html in your browser
2. The store should load with 2000+ products
3. Use filters to browse products
4. Test pagination and sorting

Press Ctrl+C to stop the server
""")

httpd.serve_forever()
