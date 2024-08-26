for subdomain in $(cat sublist.txt)
do
    host "$subdomain.google.com" | grep -v 'NXDOMAIN';
done
