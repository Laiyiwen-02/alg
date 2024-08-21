#include<bits/stdc++.h>
using namespace std;
struct node {
    int v, w;
};
vector<node> G[114514];
bool cmp(node x, node y) {
    return x.w > y.w;
}
int main() {
    ios::sync_with_stdio(false);
    cin.tie(0), cout.tie(0);
    int n, m, q;
    cin >> n >> m >> q;
    for(int i = 1; i <= m; i++) {
        int u, v, w; cin >> u >> v >> w; G[u].push_back((node){v, w});
    }
    while(q--) {
        int i, j; cin >> i >> j; int sz = G[i].size();
        if(sz < j) {
            cout << -1 << endl;
        } else {
            sort(G[i].begin(), G[i].end(), cmp);
            cout << G[i][j - 1].v << endl;
        }
    }
}