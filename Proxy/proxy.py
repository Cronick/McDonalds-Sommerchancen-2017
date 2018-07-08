from mitmproxy import http

def request(flow):
    if "/v1/configs" in flow.request.url:
        flow.request.host = "### SERVER IP ###"
        flow.request.path = "/config-api.php"

    if "/v3/advertisements" in flow.request.url:
        flow.request.host = "### SERVER IP ###"
        flow.request.path = "/advertisements.php"
        flow.request.headers["id"] = flow.request.headers['Authorization']

    if "/v3/offers" in flow.request.url:
        flow.request.host = "### SERVER IP ###"
        flow.request.path = "/getcoupons.php"
        flow.request.headers["id"] = flow.request.headers['Authorization']

    if "/v3/consumers/redeemedOffers" in flow.request.url:
        flow.request.host = "### SERVER IP ###"
        flow.request.path = "/redeem.php"
        flow.request.headers["id"] = flow.request.headers['Authorization']