source "venv/bin/activate" && screen -S mcd mitmproxy --set cadir=/home/cronick/mcd/certs --set http2=false -p 9999 -s proxy.py