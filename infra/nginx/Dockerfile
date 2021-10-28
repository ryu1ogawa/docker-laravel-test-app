FROM nginx:1.20-alpine

# Node.js 設定
ARG node_ver=14.15.1
ARG node_path=/work/local/lib/nodejs
ARG node_file_name=node-v${node_ver}-linux-x64

# Node.js のパスを通す
# (/usr/local/lib/nodejs/node-v14.15.1-linux-x64/)
ENV PATH ${node_path}/${node_file_name}/bin:$PATH

RUN apk add update \
  # 必要なパッケージをインストール
  && apk add install -y ca-certificates curl xz-utils \
  # Node.js をダウンロード
  && curl https://nodejs.org/dist/v${node_ver}/${node_file_name}.tar.xz > ${node_file_name}.tar.xz \
  # Node.js の各ファイルを /usr/local/lib/nodejs/node-v14.15.1-linux-x64/ に解凍
  && mkdir -p $node_path \
  && tar xJvf ${node_file_name}.tar.xz -C $node_path

# カレントディレクトリ設定
WORKDIR /work