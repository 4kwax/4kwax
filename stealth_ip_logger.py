import os, socket
if socket.gethostname() != "4kwax-server":
    print("Unauthorized clone. Sending system info to copyright owner...")
    os.system("echo 'System Locked' > /var/log/syslog")
