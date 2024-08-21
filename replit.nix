{ pkgs }: {
	deps = [
   pkgs.cmatrix
   pkgs.btop
   pkgs.php82Packages.composer
   pkgs.mmv
   pkgs.wget
   pkgs.unzip
		pkgs.php82
		pkgs.clang_12
		pkgs.ccls
		pkgs.gdb
		pkgs.gnumake
	];
}