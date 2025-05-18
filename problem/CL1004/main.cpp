#include <bits/stdc++.h>
#define ll long long
using namespace std;
const long long mod = 998244353;
ll a, b, n, m;
string s, t;
ll qpow(ll a, ll b) {
    if(a == 0) return 0;
    if(b == 0) return 1;
    if(b == 1) return a % mod;
    ll ans = 1; 
    while(b) {
        if(b & 1) {
            ans = ans * a % mod;
        }
        a = a * a % mod;
        b >>= 1;
    }
    return ans;
}
int main(){
	ios::sync_with_stdio(false);
	cin.tie(0), cout.tie(0);
	cin >> s >> t;
	n = s.size(), m = t.size();
	for (int i = 0; i < n; i++) {
		a *= 10, a += s[i] - '0', a %= mod;
	}
	for (int i = 0; i < m; i++) {
		b *= 10, b += t[i] - '0', b %= mod - 1;
	}
	cout << qpow(a, b) << endl;
	return 0;
}