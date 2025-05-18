#include <bits/stdc++.h>
#define ll long long
#define db double
#define vec vector
#define pll pair<ll, ll>
#define mkp make_pair
#define endl "\n"

using namespace std;

const ll mod = 998244353;

namespace fastio {
    char buf[1 << 21], *p1 = buf, *p2 = buf;
	
    const ll getc() {
        return p1 == p2 && ( p2 = (p1 = buf) + fread(buf, 1, 1 << 21, stdin), p1 == p2) ? EOF : *p1 ++;
    }
	
    const ll read() {
        ll x = 0, f = 1;
		
        char ch = getc();
		
        while (ch < '0' || ch > '9') {
            if (ch == '-') f = -1; ch = getc();
        }
		
        while (ch >= '0' && ch <= '9') {
            x = (x << 1) + (x << 3) + (ch ^ 48), ch = getc();
        }
		
        return x * f;
    }
	
    const void write(ll x) {
        if (x < 0) {
            putchar('-'), x = -x;
        }
		
        ll sta[35], top = 0;
	    
        do {
            sta[top++] = x % 10, x /= 10;
        } while (x);
	    
        while (top) putchar(sta[--top] + 48);
    }
}

#define rd fastio::read
#define wt fastio::write
#define gc fastio::getc

ll n, m, q, a[505][505], dat[505]; string s;

ll opt, l, r, ans = 0;

ll pre() {
    for (ll i = 1; i <= n; i++) {
        for (ll j = 1; j <= n; j++) {
            if (i == j) continue;
            
            ll res = 0;
            
            for (ll k = 1; k <= m; k++) {
                if (a[i][k] == a[j][k]) {
                    res ++;
                }
            }

            dat[i] = max(dat[i], res);
        }
    }
}

ll cg(ll x, ll v) {
    a[1][x] = v; ll t = 0;

    for (ll i = 2; i <= n; i++) {
        ll res = 0;
        
        for (ll j = 1; j <= m; j++) {
            res += (a[1][j] == a[i][j]);
        }

        if (res >= dat[i]) {
            t ++;   
        }
    }

    return t;
}

int main() {
    ios::sync_with_stdio(false);
    cin.tie(0), cout.tie(0);
    
    ll i, j, k, x, y, z, res = 0, now;

    n = rd(), m = rd();

    for (i = 1; i <= n; i++) {
        for (j = 1; j <= m; j++) {
            a[i][j] = rd();
        }
    }

    pre();

    for (i = 1; i <= m; i++) {
        if (a[1][i] == 0) ans = max(ans, (cg(i, 1))), a[1][i] = 0;
    }

    wt(ans), puts("");
    
    return 0;
}
