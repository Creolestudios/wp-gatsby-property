import React from "react"
import { Link, graphql } from "gatsby"
import parse from "html-react-parser"
import Layout from "../components/layout"
import Seo from "../components/seo"

const PropertyIndex = ({ data }) => {
  const posts = data.allWpProperty.nodes

  if (!posts.length) {
    return (
      <Layout>
        <Seo title="All properties" />
        <p>
          No blog posts found. Add posts to your WordPress site and they'll
          appear here!
        </p>
      </Layout>
    )
  }
  return (
    <Layout>
      <Seo title="All properties" />

      <ol style={{ listStyle: "none" }}>
        {posts.map(post => {
          const title = post.title

          return (
            <li key={post.uri}>
              <article className="post-list-item">
                <header>
                  <h2>
                    <Link to={post.uri} itemProp="url">
                      <span itemProp="headline">{parse(title)}</span>
                    </Link>
                  </h2>
                  <small>{post.date}</small>
                </header>
                <section itemProp="description">{parse(post.excerpt)}</section>
              </article>
            </li>
          )
        })}
      </ol>
    </Layout>
  )
}

export default PropertyIndex

export const property = graphql`
  query PropertyQuery {
    allWpProperty {
      nodes {
        title
        uri
        excerpt
        date(formatString: "MMMM DD, YYYY")
      }
    }
  }
`
